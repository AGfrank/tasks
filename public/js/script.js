function addContact() {

    var otherContact = document.getElementById("othersContacts");
    var row = document.createElement('div');
    row.className = 'row';

    var inputName = document.createElement("input");
    inputName.type = 'text';
    inputName.name = 'name_contact[]';
    inputName.placeholder = 'Nombre Contacto';
    inputName.className = "form-control";

    var colName = document.createElement('div');
    colName.className = 'col-md-3 form-group input-group';

    colName.appendChild(inputName);
    row.appendChild(colName);

    var inputEmail = document.createElement("input");
    inputEmail.type = 'email';
    inputEmail.name = 'email_contact[]';
    inputEmail.placeholder = 'Correo Electr��nico';
    inputEmail.className = "form-control";

    var colEmail = document.createElement('div');
    colEmail.className = 'col-md-3 form-group input-group';

    colEmail.appendChild(inputEmail);
    row.appendChild(colEmail);

    var inputPhone = document.createElement("input");
    inputPhone.type = 'number';
    inputPhone.name = 'phone_contact[]';
    inputPhone.placeholder = 'Telefono';
    inputPhone.className = "form-control";

    var colPhone = document.createElement('div');
    colPhone.className = 'col-md-2 form-group input-group';

    colPhone.appendChild(inputPhone);
    row.appendChild(colPhone);

    var inputPosition = document.createElement("input");
    inputPosition.type = 'text';
    inputPosition.name = 'position_contact[]';
    inputPosition.placeholder = 'Cargo';
    inputPosition.className = "form-control";

    var colPosition = document.createElement('div');
    colPosition.className = 'col-md-3 form-group input-group';

    colPosition.appendChild(inputPosition);
    row.appendChild(colPosition);

    otherContact.appendChild(row);
}
