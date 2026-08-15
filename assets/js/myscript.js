
var comments = [];
var DELETE_PASSWORD = "123";
var STORAGE_KEY = "yogaComments";

document.addEventListener("DOMContentLoaded", () => {
  loadComments(); // Load from localStorage on page load
});

function saveComment() {
  const form = document.getElementById("commentForm");
  const userName = form.userName.value.trim();
  const comment = form.comment.value.trim();

  if (!userName || !comment) {
    alert("Please enter both name and comment.");
    return;
  }

  const entry = {
    UserName: userName,
    dateTime: new Date().toLocaleString(),
    comment: comment
  };

  comments.push(entry);
  saveToLocalStorage();
  form.reset();
  displayComments();
  $('#myModal').modal('hide');
}

function deleteComment(index) {
  const userPassword = prompt("Enter password to delete comment:");
  if (userPassword === null) return;

  if (userPassword === DELETE_PASSWORD) {
    comments.splice(index, 1);
    saveToLocalStorage();
    displayComments();
  } else {
    alert("Incorrect password! Comment not deleted.");
  }
}

function displayComments() {
  const listDiv = document.getElementById("commentList");
  if (listDiv == null) return;
  listDiv.innerHTML = "";

  if (comments.length === 0) {
    listDiv.innerHTML = "<p class='text-muted'>No comments yet.</p>";
    return;
  }

  comments.forEach((item, index) => {
    const div = document.createElement("div");
    div.className = "card my-2";
    div.innerHTML = `
      <div class="card-body">
        <h6 class="card-title text-primary">${item.UserName}</h6>
        <p class="card-text mb-1">${item.comment}</p>
        <small class="text-muted">${item.dateTime}</small>
        <button class="btn btn-sm btn-danger float-end" onclick="deleteComment(${index})">
          Delete
        </button>
      </div>
    `;
    listDiv.appendChild(div);
  });
}

function saveToLocalStorage() {
  localStorage.setItem(STORAGE_KEY, JSON.stringify(comments));
}

function loadComments() {
  const storedData = localStorage.getItem(STORAGE_KEY);
  if (storedData) {
    try {
      comments = JSON.parse(storedData);
    } catch (e) {
      comments = [];
    }
  }
  displayComments();
}

function floatDiv(divId, distance = 20, duration = 2000, startDirection = "right" // "left" or "right"
) {
  const el = document.getElementById(divId);

  if (!el) {
    console.error(`Element with id "${divId}" not found`);
    return;
  }

  // Set initial direction
  let direction = startDirection.toLowerCase() === "left" ? -1 : 1;

  el.style.position = "relative";
  el.style.transition = `transform ${duration}ms ease-in-out`;

  function animate() {
    el.style.transform = `translateX(${direction * distance}px)`;

    // Toggle direction
    direction *= -1;
  }

  // Start immediately
  animate();

  // Loop forever
  setInterval(animate, duration);
}
