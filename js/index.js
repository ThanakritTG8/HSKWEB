$(function () {

  // $('#loginn').click(function () {

  //   var user = $('#login').val();
  //   var pass = $('#password').val();
  //   if (user == 't' && pass == '1234') {
  //     window.location.replace('./teacher/index.html');
  //   } else if (user == 'admin' && pass == '1234') {
  //     window.location.replace('./admin/index.html');
  //   } else {
  //     window.location.replace('index.php');
  //   }

  // });

  $('#click_part1').click(function () {
    location.replace('List_HSK1.html')


  });

  $('#click_test').click(function () {
    window.location.replace('PreTest.html')


  });
  $('#score').click(function () {
    window.location.replace('Score.html')


  });
  $('#score2').click(function () {
    window.location.replace('Score2.html')


  });
  $('#list_hsk1').click(function () {
    window.location.replace('List_HSK1.html')


  });
  $('#list_admin_hsk1').click(function () {
    window.location.replace('List_HSK1.html')


  });
  $('#sortTable_post').click(function () {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;;
    table = document.getElementById("myTable");
    switching = true;
    dir = "asc";
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[7];
        y = rows[i + 1].getElementsByTagName("TD")[7];
        //check if the two rows should switch place:
        if (dir == "asc") {
          if (Number(x.innerHTML) > Number(y.innerHTML)) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        } else if (dir == "desc") {
          if (Number(x.innerHTML) < Number(y.innerHTML)) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;

          }
        }
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        switchcount++;
      } else {
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }


  });
  $('#sortTable_pre').click(function () {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;;
    table = document.getElementById("myTable");
    switching = true;
    dir = "asc";
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[2];
        y = rows[i + 1].getElementsByTagName("TD")[2];
        //check if the two rows should switch place:
        if (dir == "asc") {
          if (Number(x.innerHTML) > Number(y.innerHTML)) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        } else if (dir == "desc") {
          if (Number(x.innerHTML) < Number(y.innerHTML)) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;

          }
        }
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        switchcount++;
      } else {
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }


  });

  $('#sortTable_status').click(function () {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("myTable");
    switching = true;
    //Set the sorting direction to ascending:
    dir = "asc";
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[8];
        y = rows[i + 1].getElementsByTagName("TD")[8];
        /*check if the two rows should switch place,
        based on the direction, asc or desc:*/
        if (dir == "asc") {
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        } else if (dir == "desc") {
          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        }
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        //Each time a switch is done, increase this count by 1:
        switchcount++;
      } else {
        /*If no switching has been done AND the direction is "asc",
        set the direction to "desc" and run the while loop again.*/
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  });
  $('#sortTable_status_hsk1').click(function () {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("myTable");
    switching = true;
    //Set the sorting direction to ascending:
    dir = "asc";
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[4];
        y = rows[i + 1].getElementsByTagName("TD")[4];
        /*check if the two rows should switch place,
        based on the direction, asc or desc:*/
        if (dir == "asc") {
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        } else if (dir == "desc") {
          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        }
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        //Each time a switch is done, increase this count by 1:
        switchcount++;
      } else {
        /*If no switching has been done AND the direction is "asc",
        set the direction to "desc" and run the while loop again.*/
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  });
  $('#sortTable_status_hsk2').click(function () {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("myTable");
    switching = true;
    //Set the sorting direction to ascending:
    dir = "asc";
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[7];
        y = rows[i + 1].getElementsByTagName("TD")[7];
        /*check if the two rows should switch place,
        based on the direction, asc or desc:*/
        if (dir == "asc") {
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        } else if (dir == "desc") {
          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        }
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        //Each time a switch is done, increase this count by 1:
        switchcount++;
      } else {
        /*If no switching has been done AND the direction is "asc",
        set the direction to "desc" and run the while loop again.*/
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  });

  $('#score_admin').click(function () {
    window.location.replace('School.html')


  });
  $('#score_school').click(function () {
    window.location.replace('Score_admin.html')


  });
  $('#score_all').click(function () {
    window.location.replace('Score_all.html')


  });


  $('#hsk1_vocab').click(function () {
    window.location.replace('HSK1_Vocab.html')


  });
  $('#hsk1_lesson').click(function () {
    window.location.replace('HSK1_lesson.html')


  });
  $('#hsk1_mooc').click(function () {
    window.location.replace('HSK1_mooc.html')


  });
  $('#vocab').click(function () {
    window.location.replace('HSK1_Vocab.html')


  });
  $('#lesson').click(function () {
    window.location.replace('HSK1_lesson.html')


  });
  $('#mooc').click(function () {
    window.location.replace('HSK1_mooc.html')


  });
  $('#exam').click(function () {
    window.location.replace('HSK1_exam.html')


  });
  $('#teacher_vocab').click(function () {
    window.location.replace('HSK1_vocab.html')


  });
  $('#teacher_lesson').click(function () {
    window.location.replace('HSK1_lesson.html')


  });
  $('#teacher_mooc').click(function () {
    window.location.replace('HSK1_mooc.html')


  });
  $('#f_score').click(function () {
    window.location.replace('Score.html')


  });
  $('#f_lesson').click(function () {
    window.location.replace('HSK1.html')


  });
});


// timer
function startTimer(duration, display) {
  var timer = duration,
    minutes, seconds;
  setInterval(function () {
    minutes = parseInt(timer / 60, 10);
    seconds = parseInt(timer % 60, 10);

    minutes = minutes

      <
      10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;
    display.textContent = minutes + ":" +
      seconds;
    if (--timer < 0) {
      timer = duration;
    }
  }, 1000);
}
window.onload = function () {
  var twentyMinutes = 60 * 20,
    display = document.querySelector('#time');
  startTimer(twentyMinutes, display);
};