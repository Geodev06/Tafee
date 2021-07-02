function showNav() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function getRequest(distance, persons){
  return $.ajax({
    type: 'post',
    url: 'Prediction_Request.php',
    data: {
      'persons': persons.substring(persons.indexOf('=')+1),
      'kilometers': distance
    },
    beforeSend: function () {
     $('.loader-container').css('display','block');
     $('.result').css('display','none');
    },
    success: (data) => {
      $('.loader-container').css('display','none');
      $('.result').css('display','block');
      $('#value').html(data);
    }
  })
}

//chart