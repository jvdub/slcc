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
    // document.getElementById('message').innerHTML = message; // This is the OLD JS way
    // document.querySelector('#message').innerHTML = message; // This is the NEW JS way
    $('#message').html(message); // This is the jQuery Way
}

function getTimeOfDay() {
    let now = new Date();
    let hour = now.getHours();
    return hour;
}

function greetUser() {
    let nameOld = document.getElementById('greetingName').value; // This is the OLD JS way
    let name = document.querySelector('#greetingName').value; // This is the NEW JS way
    let nameJQuery = $('#greetingName').val(); // This is the jQuery Way

    // document.getElementById('userName').innerHTML = name; // This is the OLD JS way
    // document.querySelector('#userName').innerHTML = name; // This is the NEW JS way
    $('#userName').html(name); // This is the jQuery Way

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
    // let tableBodyJQuery = $('#references-table > tbody'); // jQuery way

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
        // tableBodyJQuery.html(tableBodyJQuery.html() + html); // If using jQuery

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

    // document.getElementById('form').onsubmit = validateForm;
    // document.querySelector('#form').addEventListener('submit', validateForm);
    // $('#form').on('submit', validateForm);
    $('#form').submit(validateForm);
    attachEvents();
});

function attachEvents() {
    $('#submit').click(doAThing);
    $('.school').click(toggleSubtext);
}

function toggleSubtext($event) {
    $($event.target.nextElementSibling).toggle({ duration: 1000 });
}

function validateForm(event) {
    // if (!document.getElementById('name').value.includes(' ')) {
    // if (!$('#name').val().includes(' ')) {
    if (!document.querySelector('#name').value.includes(' ')) {
        console.log('Enter your full name!');
        event.preventDefault();
    }
}

function doAThing() {
    let contact = {
        name: '',
        email: '',
        phoneNumber: '',
        reason: '',
        comment: ''
    };

    // JS way
    contact.name = document.querySelector('#name').value;
    contact.email = document.querySelector('#email').value;
    contact.phoneNumber = document.querySelector('#phone-number').value;
    contact.reason = document.querySelector('input[name="reasonForContacting"]:checked').value;
    contact.comment = document.querySelector('#comment').value;

    // jQuery way
    // contact.name = $('#name').val();
    // contact.email = $('#email').val();
    // contact.phoneNumber = $('#phone-number').val();
    // contact.reason = $('input[name="reasonForContacting"]:checked').val();
    // contact.comment = $('#comment').val();

    console.log(contact);
}
