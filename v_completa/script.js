$('.ciaoaa').append('Ciao, come stai?');
console.log('wow');

$.ajax({

  url: 'data.php',
  method: 'GET',
  success: function(data) {
    console.log(data['response']);
    var myAlbums = data['response'];
    console.log(myAlbums);


    var target = $('#disks-box');
    var template = $('#album-template').html();
    var compiled = Handlebars.compile(template);

    for (var i = 0; i < myAlbums.length; i++) {
      let myAlbum = myAlbums[i];
      var myPoster = myAlbum['poster'];
      var myTitle = myAlbum['title'];
      var myAuthor = myAlbum['author'];
      var myGenre = myAlbum['genre'];
      var myYear = myAlbum['year'];

      var albumHTML = compiled({
        poster: myPoster,
        title: myTitle,
        author: myAuthor,
        // genre: myGenre,
        year: myYear
      });

      target.append(albumHTML);
    }
  },
  error: function(err) {
    console.log(err);
  }

});




// var movieHTML = compiled({
//   li_class: i,
//   title: movie['title'],
//   type: '<div class="movie">Movie</div>',
//   original_title: movie['original_title'],
//   original_language: movie['original_language'],
//   image: myPoster
// });
// target.append(movieHTML);
