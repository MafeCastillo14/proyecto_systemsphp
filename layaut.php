<style>
    p {
        font-family: 'Poppins';
        font-weight: 800;
    }
</style>

<header style="width: 100%; height: 100px;background:#832561; display: flex; justify-content:end; align-items: center; padding-right: 40px;">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
  <link rel="stylesheet" src="style.css">
    <div style="cursor: pointer; display: flex;align-items: center; flex-direction: column;" onclick="redirect()">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg>

        <p style="font-size: 16px; font-weight: 800;">fernanda</p>

    </div>

    <script>
        const redirect = () => {
            window.location.href = "./Loguin.php";
        }
    </script>

</header>