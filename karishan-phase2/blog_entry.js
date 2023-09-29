function preventDefault(){
            

    let title_input = document.getElementById('title');
    let content_input = document.getElementById('content');

    title_input.style.backgroundColor = "white";
    content_input.style.backgroundColor = "white";

    if (title_input.value == "")
    {
        title_input.style.backgroundColor = "#FFCCCB";

    }
    if (content_input.value == "")
    {
        content_input.style.backgroundColor = "#FFCCCB";

    }


}

function clearFields()
{
    let title_input = document.getElementById('title');
    let content_input = document.getElementById('content');

    title_input.style.backgroundColor = "white";
    content_input.style.backgroundColor = "white";

    title_input.value = "";
    content_input.value = "";

}