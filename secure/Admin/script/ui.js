document.addEventListener('DOMContentLoaded', function() {
    let currentPage =  0;
    const itemsPerPage =  4;
    const entries = document.querySelectorAll('#entriesContainer .row'); 
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
});
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
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
});
function openModal() {
    document.getElementById("backdrop").style.display = "block";
    document.getElementById("TransactionVerificationModal").style.display = "block";
    document.getElementById("TransactionVerificationModal").classList.add("show");
}
function closeModal() {
    document.getElementById("backdrop").style.display = "none";
    document.getElementById("TransactionVerificationModal").style.display = "none";
    document.getElementById("TransactionVerificationModal").classList.remove("show");
}
