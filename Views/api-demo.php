<h1 id="data-demo"></h1>

<script>
    fetch('/api/data.php')
        .then(d => d.json())
        .then(d => document.getElementById('data-demo').innerHTML = `
            Dollar: ${d.dollar} - Euro: ${d.euro}
        `);

</script>