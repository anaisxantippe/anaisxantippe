document.addEventListener('DOMContentLoaded', function () {
    
    var listView = document.querySelector('.list-view');
    var gridView = document.querySelector('.grid-view');
    var projectsList = document.querySelector('.project-boxes');
    
    listView.addEventListener('click', function () {
      gridView.classList.remove('active');
      listView.classList.add('active');
      projectsList.classList.remove('jsGridView');
      projectsList.classList.add('jsListView');
    });
    
    gridView.addEventListener('click', function () {
      gridView.classList.add('active');
      listView.classList.remove('active');
      projectsList.classList.remove('jsListView');
      projectsList.classList.add('jsGridView');
    });

    //open/close the messages section in smaller screens
    document.querySelector('.messages-btn').addEventListener('click', function () {
      document.querySelector('.messages-section').classList.add('show');
    });
    
    document.querySelector('.messages-close').addEventListener('click', function() {
      document.querySelector('.messages-section').classList.remove('show');
    });

    //add a new to do
    // function openForm() {
    //   document.getElementById("todo").style.display = "block";
    // }
    
    // function closeForm() {
    //   document.getElementById("todo").style.display = "none";
    // }

    // document.querySelector('.todo-btn').addEventListener('click', function () {
    //   document.querySelector('.form-pop').classList.add('show');
    // });

    // document.querySelector('.closetd-btn').addEventListener('click', function() {
    //   document.querySelector('.form-pop').classList.remove('show');
    // });
  
  });