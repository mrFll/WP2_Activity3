@extends('mainTemplate')

@section('title', 'Sign In')

@section('content')
  @parent
        <div style="font-size: x-large;">
          <form method="POST" action="/signin" id="signInForm">
            <label for="UsernameInput">Username</label>
            <input type="text" id="UsernameInput" name="Username" onchange="focusChangeBorder('UsernameInput')"><br><br>

            <labeln for="PasswordInput">Password</label>
            <input type="password" id="PasswordInput" name="Password" onchange="focusChangeBorder('PasswordInput')"><br><br>
          </form>
          <button onclick="sendDate()">add</button>
        </div>
@endsection


@section('scrpt')
  @parent
      <script>

          /**
          * check the input data to be valid before send them to server
          * return boolean that show the validation
          */
          function checData(){

            var username = document.getElementById('UsernameInput');
            var password = document.getElementById('PasswordInput');

            var validation = true;
            var error = 'please enter the ';

            // check the value of username input; if it is empty, show error
            if(username.value == ''){
              error += 'username, ';
              validation = false;
              username.style.borderColor = 'red';
            }

            // check the value of password input; if it is empty, show error
            if(password.value == ''){
              error += 'password';
              validation = false;
              password.style.borderColor = red;
            }

            if(!validation){
              alert(error);
            }
            alert(validation);

            return validation;
          }

          /**
          * post data to server after checking the validation of them
          */
          function sendDate(){
            console.log("buttttton");
            if(checkData()){
              //document.getElementById('signInForm').submit();
              alert("data send");
            }
          }

          /**
          * change input element border color when user change the mistake
          */
          function focusChangeBorder(elementName){
            document.getElementById(elementName).style.borderColor = "white";
          }

      </script>
@endsection
