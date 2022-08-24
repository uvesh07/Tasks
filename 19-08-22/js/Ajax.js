console.log("Hello This is Ajax Practical .");


let btn = document.getElementById('fetch');

btn.addEventListener('click', btnclick);

function btnclick() {
    console.log("You have clicked btn..");

    //XHR object
    const xhr = new XMLHttpRequest();

    //open the object // js/uvesh.txt
    xhr.open('GET', 'https://jsonplaceholder.typicode.com/users', true);

    xhr.onprogress = function () {
        console.log("On Prograss");
    }

    // what to do when response is ready
    xhr.onload = function () {

        if (xhr.status === 200) {
            console.log(this.responseText);
            let obj = JSON.parse(this.responseText);

            let list1 = document.getElementById('list1');
            let str = "";
            for(key in obj){
                str +=`<li> ${obj[key].email} </li>`;
            }

            list1.innerHTML = str;
        }

        else {
            console.error("Some Error occurred.");
        }
    }
    //send the request 
    xhr.send();

}

