jQuery( document ).ready(function($) {

//   button click function to refresh page quotes
$('#refresh-quotes').on('click', function(event) {
  event.preventDefault();
  $.ajax({
    method: 'get',
    url: red_vars.rest_url + "wp/v2/posts?" + red_vars.filter,
    data: {
      action: 'red_comment_ajax',
    },
    beforeSend: function(xhr) {
      xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
    }
  }).done(function(response) {
// function to appende text with webpage link or only as text. Also not to keep the comma when not needed.
    var appendTxt = (function() {
      if (response[0]._qod_quote_source_url && response[0]._qod_quote_source) {
        return "<h2>" + "<a href=" + response[0]._qod_quote_source_url + ">, " + response[0]._qod_quote_source + "</a>" + "</h2>";  
      }
      else if (response[0]._qod_quote_source) {
        return "<h2>, " + response[0]._qod_quote_source + "</h2>";    
      }
      else {
        return;
      }
    });
// statement to grab what is being fetched from the database and play with the information.
      history.pushState({
          id: 'homepage'
      }, 'title', response[0].slug);
      $('.refresh p').remove();
      $('.author-wrapper').remove();
      $('.refresh').append(response[0].content.rendered);
      $('.refresh').append("<div class='author-wrapper'></div>");
      $('.author-wrapper').append("<h2>" + response[0].title.rendered + "</h2>");
      $('.author-wrapper').append(appendTxt);
     });
  });
  // function to add new quotes to system.
  $('#button-submit-quote').on('click', function(event) {
    event.preventDefault();

    var data = $('.submit-quote-form :input').serializeArray();
    console.log(data);
    $.ajax({
      method: 'post',
      url: red_vars.rest_url + "wp/v2/posts",
      data: {
        title: data[0].value,
        content: data[1].value,
        _qod_quote_source: data[2].value,
        _qod_quote_source_url: data[3].value,
        status: 'pending'
      },
      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
      }
    }).done(function(submited) {
        $('.submit-quote-form').each(function(){
          this.reset();
          alert('Thank you for submiting a new quote');
        });    
      });
  });
});