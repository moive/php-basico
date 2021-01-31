
<button class="btn btn-success" onclick="getCurrency('dollar')">Dollar</button>
<button class="btn btn-danger" onclick="getCurrency('euro')">Euro</button>

<div class="row">
    <div class="col-sm-6 mt-5">
        <ul class="list-group"></ul>
    </div>
</div>

<script>
    function getCurrency(currency) {
        
        fetch(`/api/${currency}`)
            .then(d => d.json())
            .then(data => {
                var result = document.querySelector('.list-group');
                result.innerHTML = '';

                for (const d of data) {
                    result.innerHTML += `
                        <li class="list-group-item">Date: ${d.date} - Value: ${d.value}</li>
                    `;
                }
            });
    }

</script>