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

$(document).ready(() => {
    $('#getUserName').modal('show');
    customizeGreeting();
});

function greetings() {
    let user = window.prompt('Please enter your name:');
    window.alert(`Hi ${user}! Thank you for reviewing my resume site.`);
}
