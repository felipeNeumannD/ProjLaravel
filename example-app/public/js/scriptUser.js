function toggleFields() {
    const alunoRadio = document.getElementById('alunoRadio');
    const funcionarioRadio = document.getElementById('funcionarioRadio');
    const alunoFields = document.getElementById('alunoFields');
    const funcionarioFields = document.getElementById('funcionarioFields');

    if (alunoRadio.checked) {
        alunoFields.style.display = 'block';
        funcionarioFields.style.display = 'none';
    } else if (funcionarioRadio.checked) {
        funcionarioFields.style.display = 'block';
        alunoFields.style.display = 'none';
    } else {
        alunoFields.style.display = 'none';
        funcionarioFields.style.display = 'none';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    toggleFields();

    const alunoRadio = document.getElementById('alunoRadio');
    const funcionarioRadio = document.getElementById('funcionarioRadio');
    
    alunoRadio.addEventListener('change', toggleFields);
    funcionarioRadio.addEventListener('change', toggleFields);
});