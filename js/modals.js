// Function to open a modal in an onclick action
// @modalID is an argument that takes the relevant modal ID
function openModal(modalID) {
    let modal = document.getElementById(modalID)
    modal.style.display = "block";
}

// Function to close a modal in an onclick action
// @modalID is an argument that takes the relevant modal ID
function closeModal(modalID) {
    let modal = document.getElementById(modalID)

    document.getElementsByClassName("close")[0].onclick = () => {
        modal.style.display = "none";
    }

    window.onclick = function (e) {
        if (e.target == modal) {
            modal.style.display = "none";
        }
    }
}

