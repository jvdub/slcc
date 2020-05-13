function customizeGreeting() {
    let hour = getTimeOfDay();
    let message = 'Early Bird Special';

    if (hour >= 5 && hour < 12) {
        message = 'Good Morning';
    } else if (hour >= 12 && hour < 18) {
        message = 'Good Afternoon';
    } else if (hour >= 18) {
        message = 'Good Evening and Good Night';
    }

    displayGreetingMessage(message);
}

function displayGreetingMessage(message) {
    document.getElementById('message').innerHTML = message;
}

function getTimeOfDay() {
    let now = new Date();
    let hour = now.getHours();
    return hour;
}

function greetUser() {
    let name = document.getElementById('greetingName').value;
    document.getElementById('userName').innerHTML = name;
    $('#getUserName').modal('hide');
    $('#greetUser').modal('show');
}

function greetings() {
    let user = window.prompt('Please enter your name:');
    window.alert(`Hi ${user}! Thank you for reviewing my resume site.`);
}

function displayReferences() {
    let references = [
        {
            name: 'Bob Dole',
            phoneNumber: '800-555-5555',
            email: 'bob.dole@aol.com'
        },
        {
            name: 'Bill Clinton',
            phoneNumber: '800-555-1234',
            email: 'bill@aol.com'
        },
        {
            name: 'Ralph Nader',
            phoneNumber: '800-555-2345',
            email: 'ralph.nader@aol.com'
        }
    ];

    let tableBody = document.querySelector('#references-table > tbody');

    // let i = 0;
    // while (i < references.length) {
    //     let html = `<tr>
    //         <td>${references[i].name}</td>
    //         <td>${references[i].phoneNumber}</td>
    //         <td>${references[i].email}</td>
    //     </tr>`;

    //     tableBody.innerHTML += html;
    //     ++i;
    // }

    // references.forEach((reference) => {
    //     let html = `<tr>
    //         <td>${reference.name}</td>
    //         <td>${reference.phoneNumber}</td>
    //         <td>${reference.email}</td>
    //     </tr>`;

    //     tableBody.innerHTML += html;
    // });

    for (let reference of references) {
        let html = `<tr>
            <td>${reference.name}</td>
            <td>${reference.phoneNumber}</td>
            <td>${reference.email}</td>
        </tr>`;

        tableBody.innerHTML += html;

    //    let tr = document.createElement('tr');
    //    let nameCell = document.createElement('td');
    //    nameCell.innerText = reference.name;
    //    let phoneCell = document.createElement('td');
    //    phoneCell.innerText = reference.phoneNumber;
    //    let emailCell = document.createElement('td');
    //    emailCell.innerText = reference.email;

    //    tr.appendChild(nameCell);
    //    tr.appendChild(phoneCell);
    //    tr.appendChild(emailCell);

    //    tableBody.appendChild(tr);
    }
}

$(document).ready(() => {
    $('#getUserName').modal('show');
    customizeGreeting();
    displayReferences();

    document.getElementById('form').onsubmit = validateForm;
});

function validateForm(event) {
    if (!document.getElementById('name').value.includes(' ')) {
        console.log('Enter your full name!');
        event.preventDefault();
    }
}
