class UI {
  static displayPlaylist() {
    const playlist = Store.getPlaylist();

    playlist.forEach((track) => UI.addSongToPlaylist(track));
  }

    static addSongToPlaylist(track) {
      // console.log(track);

      const playlist = document.querySelector('.playlist');
      const newSong = document.createElement('li');

      newSong.className = 'list-group-item';
      newSong.innerHTML = `
        <span class="font-weight-bold text-break">${track.title}</span>  <span class="font-italic text-light text-break">${track.author}</span> <a href="#" class="text-primary float-right delete">x</a>`;
      

      playlist.appendChild(newSong);
    }

    static deleteTrack(el) {
      if(el.classList.contains('delete')){
        el.parentElement.remove();
      }
    }

    // // Show alert
    // static showAlert(message, className) {
    //   const div = document.createElement('div');
    //   div.className = `alert alert-${className}`;
    //   div.appendChild(document.createTextNode(message));
    //   const container = document.querySelector('.container');
    //   const form = document.querySelector('#book-form');
    //   container.insertBefore(div, form);
    //   // Vanish in 3 seconds
    //   setTimeout(() => document.querySelector('.alert').remove(), 3000);
    // }

    // // Clear Fields
    //   static clearFields() { 
    //   document.querySelector('#title').value = '';
    //   document.querySelector('#author').value = '';
    //   document.querySelector('#isbn').value = '';
    // }
}