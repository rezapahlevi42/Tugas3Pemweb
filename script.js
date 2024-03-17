function submitForm() {
    const form = document.getElementById('dataForm');
    const formData = new FormData(form);
  
    axios.post('process.php', formData)
      .then(response => {
        document.getElementById('result').innerHTML = response.data;
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }
  