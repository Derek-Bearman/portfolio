class Store {
  static getPlaylist() {
   let playlist;
   if (localStorage.getItem('playlist') === null){
     playlist = [];
   } else {
     playlist = JSON.parse(localStorage.getItem('playlist')); 
   }

   return playlist;
  }

  static addSongToPlaylist(track) { 
    const playlist = Store.getPlaylist();
    playlist.push(track);
    localStorage.setItem('playlist', JSON.stringify(playlist));
 }

 static removeTrack(title, author) {
     const playlist = Store.getPlaylist();

     playlist.forEach((track, index) => {
       if(track.title === title && track.author === author){
         playlist.splice(index, 1);
       }
     });

     localStorage.setItem('playlist', JSON.stringify(playlist));

 }
}