document.addEventListener('DOMContentLoaded', function() {
    let currentPage =  0;
    const itemsPerPage = 4;
    const entries = document.querySelectorAll('#entriesContainer .row'); 
    if(entries.length===0 && document.getElementById('prevBtn')===null && document.getElementById('nextBtn')===null ){
        console.log("Data points on page do not exceed page viewability limits.\nPagination Skipped.");    
    }
    else{
        const totalPages = Math.ceil(entries.length / itemsPerPage);
        function paginate() {
            entries.forEach((entry, index) => {
                if (index >= currentPage * itemsPerPage && index < (currentPage +  1) * itemsPerPage) {
                    entry.style.display = '';
                } else {
                    entry.style.display = 'none';
                }
            });

            document.getElementById('prevBtn').disabled = currentPage ===  0;
            document.getElementById('nextBtn').disabled = currentPage === totalPages -  1;
        }

        document.getElementById('prevBtn').addEventListener('click', function() {
            currentPage--;
            paginate();
        });

        document.getElementById('nextBtn').addEventListener('click', function() {
            currentPage++;
            paginate();
        });
        paginate(); // Initial pagination
    }
});
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    if (searchInput===null){ console.log("Page search has not been enabled for this page.")}
    else{
        const rows = document.querySelectorAll('.row.pb-2.xstext.text-center.align-items-center');
        searchInput.addEventListener('input', function() {
            const searchValue = searchInput.value.toLowerCase();

            rows.forEach(function(row) {
                const firstCol = row.querySelector('.col:first-child');
                if (firstCol) {
                    const firstColValue = firstCol.textContent.toLowerCase();
                    if (firstColValue.includes(searchValue)) {
                        row.style.display = ''; // Show the row
                    } else {
                        row.style.display = 'none'; // Hide the row
                    }
                }
            });
        });
    }
});

function openModal(modalname) {
    document.getElementById("backdrop").style.display = "block";
    document.getElementById(modalname).style.display = "block";
    document.getElementById(modalname).classList.add("show");
}
function closeModal(modalname) {
    document.getElementById("backdrop").style.display = "none";
    document.getElementById(modalname).style.display = "none";
    document.getElementById(modalname).classList.remove("show");
}

const miniButtons = document.querySelectorAll(".btn.btn-outline-dark.mini-button:not(.extra)");
function makeButtonActive(e) {
        miniButtons.forEach(button => {
        button.classList.remove('active');
        });
    
        // Add active class to the clicked button
        e.target.classList.add('active');
}

function Postdata(jsonData, endpointUrl) {
    fetch(endpointUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: jsonData
    })
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response eroor');
      }
      return response.json();
    })
    .then(data => {
      console.log('Success:', data);
    })
    .catch(error => {
      console.error('Error:', error);
    });
  }


//specific for notifications page
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('NotificationPreviewModalSubmit')===null){
        console.log("Notification Page specific content skipped.")
    }
    else{
        document.getElementById('NotificationPreviewModalSubmit').addEventListener('click', function() {
            const CreateNotificationForm = document.getElementById('CreateNotification');
            const formData = new FormData(CreateNotificationForm);
            const notifdata = {};
            formData.forEach((value, key) => {
            notifdata[key] = value;
            });

            for(let btn of miniButtons){
                for (let val of btn.classList){
                    if (val==='active'){
                        notifdata['NotificationType']=btn.name
                        break;
                    }
                }
            }
            console.log(notifdata);
            const jsonData = JSON.stringify(notifdata);
            Postdata(jsonData,'http://localhost:5000/')
        });
    }
});

