const search = document.querySelector('#search');
const matchList = document.querySelector('#match-list');
let songs;

const loadLibrary = async () => {
    const res = await fetch('data/Library.json');
    const songData = await res.json();
    songs = songData.dict.dict.dict;
};

function searchSongs(searchText) {
    // Get matches to current text input
    let matches = songs.filter(song => {
        const regex = new RegExp(`^${searchText}`, 'gi');
        return song.string[0].match(regex) || song.string[1].match(regex);
    });

    if (searchText.length === 0) {
        matches = [];
        matchList.innerHTML = '';
    }

    const outputHtml = matches => {
        if(matches.length > 0) {
            const html = matches.map(song => `
            <div class="card card-body mb-1">
            <div class="row">
                <div class="col">
                    <h4>${song.string[0]}</h4>
                    <h5 class="text-light">${song.string[1]}</h5>
                </div>
                <div class="col-2 d-flex flex-column justify-content-center align-items-center">
                    <p class="btn btn-lg ml-2 add" onclick="addSong(this)">+</p>
                </div>
            </div>
            </div>`)
            .join('');
    
            matchList.innerHTML = html;
        }
    }

    outputHtml(matches);
 
}

function addSong(song){

    const title = song.parentElement.previousElementSibling.children[0].innerText;

    const author = song.parentElement.previousElementSibling.children[1].innerText;

    const track = {
        title,
        author
    }

    console.log(track);

    UI.addSongToPlaylist(track);

    Store.addSongToPlaylist(track); 

}

// Event: Remove a Book
document.querySelector('.playlist').addEventListener('click', (e) => {
    // Remove Book from UI
    UI.deleteTrack(e.target);
  
    // Remove Book from Store
    Store.removeTrack(
        // Title
        e.target.previousElementSibling.previousElementSibling.textContent,
        // Author
        e.target.previousElementSibling.textContent);
  
    // Show delete message
    // UI.showAlert('Book Removed ', 'success');
  });

window.addEventListener('DOMContentLoaded', loadLibrary);
window.addEventListener('DOMContentLoaded', UI.displayPlaylist);
search.addEventListener('input', () => searchSongs(search.value));
