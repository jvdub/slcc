function greetUser() {
    let name = document.getElementById('greetingName').value;
    document.getElementById('userName').innerHTML = name;
    $('#getUserName').modal('hide');
    $('#greetUser').modal('show');
}

$(document).ready(() => {
    $('#getUserName').modal('show');
});

function greetings() {
    let user = window.prompt('Please enter your name:');
    window.alert(`Hi ${user}! Thank you for reviewing my resume site.`);
}
