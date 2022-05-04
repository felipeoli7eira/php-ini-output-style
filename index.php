<?php phpinfo() ?>

<style>

    * {
        font-family: 'Fira Code', monospace;
        font-size: 16px;
    }

    h1 {
        font-size: 25px;
    }

    body {
        background-color: #232531;
    }

    a, h1 {
        color: #eee;
        font-weight: lighter;
    }

    table {
        box-shadow: none !important;
    }

    table td {
        padding: 10px;
    }

    table:first-child tbody tr td h1 {
        color: #232531;
    }

    table:first-child tbody tr td {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem;
        border: none;
        background-color: #8993be;
    }

    table:first-child tbody tr td a {
        background-color: #8993be;
    }

    td.e {
        background-color: #8993be;
        color: #232531;
    }

    tr.h {
        background-color: #626987;
        color: white;
        font-weight: lighter !important;
    }
</style>


<script defer>
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            const phpLogo = document.querySelector('table:first-child tbody tr td a img')
            phpLogo.setAttribute('src', 'https://www.php.net/images/logos/php-logo.svg')
            phpLogo.setAttribute('width', '100')
        }
    }
</script>