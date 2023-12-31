//Ajax
const xhr = new XMLHttpRequest();
xhr.open('GET', '../Model/json/course.json', true);
xhr.send();
xhr.onload = function () {
    if (this.status === 200)//200 ok
    {
        let obj = JSON.parse(this.responseText);
        console.log(obj);

        let list = document.getElementById('course');
        str = "";
        for (key in obj) {
            str = str + `
            <div class="course_box">
                <u><h1 class="title">${obj[key].course_name}</h1></u>
                <h1 class="price">${obj[key].course_price}$</h1>
                <h3 class="teacher">${obj[key].course_teacher}</h3>
                <h1>Description</h1><br>
                <p>${obj[key].course_description}</p>
                <h4>Publishing Date: ${obj[key].course_publishingDate}</h4>
                <button class="buy" data-course-id="${key}">Buy</button>
            </div>`;
        }

        list.innerHTML = str;

        // Add event listener to each "Buy" button
        document.querySelectorAll('.buy').forEach(button => {
            button.addEventListener('click', function () {
                const courseId = this.getAttribute('data-course-id');
                console.log(`Buy button clicked for course with ID: ${courseId}`);

                let url='../View/course.json';
                let user={"course_id": "1","course_name": "Introduction to SQL","course_teacher": "John Doe","course_description": "Learn the basics of Structured Query Language (SQL) for managing and querying relational databases. Understand fundamental database concepts, such as tables, relationships, and normalization. Acquire skills in writing SQL queries to retrieve and manipulate data.","course_publishingDate": "2023-01-01","course_price": "49.99"};

                fetch(url,{
                    method:"POST",
                    body:JSON.stringify(user)
                }).then(result=>
                    console.log(result.json()))
                // Update the button text and hide the button
                this.textContent = 'Added to cart';
                $(this).hide(3000);
            });
        });

    }
    else {
        console.log("Some error occured");
    }
}    
