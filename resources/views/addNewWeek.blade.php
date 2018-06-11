
@extends('mainTemplate')

@section('title', 'add new course')

@section('content')
  @parent


      <fieldset style="font-size: xx-large; color: black;">
          <legend>add new week:</legend>
          <form method="POST" action="/course/add" id="weekInfoForm">
          <label for="start">starting date:</label>
          <input type="date" id="start" name="starting_date" onchange="focusChangeBorder('start')"><br><br>

          <labeln for="end">ending date:</label>
          <input type="date" id="end" name="ending_date" onchange="focusChangeBorder('end')"><br><br>

          <label for="numb">week number:</label>
          <input type="number" id="numb" name="week_numb" min="1" onchange="focusChangeBorder('numb')"><br><br>

          <label for="titles">week titles:</label>
          <textarea name="week_titles" id="titles" rows="5" cols="25" onchange="focusChangeBorder('titles')"></textarea><br>
        </form>

          <button onclick="sendDate()">add</button>
      </fieldset>


    <script>
    /**
    * check data validation before send them to server
    */
    function checkData(){

      var start = document.getElementById('start');
      var end = document.getElementById('end');
      var numb = document.getElementById('numb');
      var titles = document.getElementById('titles');

      var validation = true;
      var error = 'please enter the ';

      // check starting date to be filled
      if(start.value == ''){
        error += 'starting date, ';
        validation = false;
        start.style.borderColor = 'red';
      }

      // check ending date to be filled
      if(end.value == ''){
        error += 'ending date, ';
        validation = false;
        end.style.borderColor = 'red';
      }

      // check if week number is empty
      if(numb.value == ''){
        error += 'week number, ';
        validation = false;
        numb.style.borderColor = 'red';
      }

      if(titles.value == ''){
        error += 'week titles';
        validation = false;
        titles.style.borderColor = 'red';
      }

      if(!validation){
        alert(error);
      }

      return validation;
    }

    /**
    * handle sending data to server
    */
    function sendDate(){
      if(checkData()){
        console.log(document.getElementById('weekInfoForm'));
        //document.getElementById('weekInfoForm').submit();
      }
    }

    /**
    * change input element border color when user change the mistake
    *  @parameters string elementName
    */
    function focusChangeBorder(elementName){
      document.getElementById(elementName).style.borderColor = "white";
    }
    </script>
@endsection
