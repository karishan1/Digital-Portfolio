function preventDefault(){


        let username_input = document.getElementById('username');
        let password_input = document.getElementById('password');

        username_input.style.backgroundColor = "white";
        password_input.style.backgroundColor = "white";

        if (username_input.value == "")
        {
            username_input.style.backgroundColor = "#FFCCCB";

        }
        if (password_input.value == "")
        {
            password_input.style.backgroundColor = "#FFCCCB";

        }


    }

