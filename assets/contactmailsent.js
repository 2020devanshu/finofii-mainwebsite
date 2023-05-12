 <script>
              const scriptURL = "https://script.google.com/macros/s/AKfycbycXMbtRrs9c0dgxhuX-gS83qH3f7z_KclDfSD39Zqk4YIYl0M9CBIwbD7PedKuvAQ5/exec";
              const form = document.forms["formName"];
              form.addEventListener("submit", (e) => {
                if (document.getElementById("name").value === null || document.getElementById("name").value === "" || document.getElementById("name").value === undefined || document.getElementById("company-name").value === null || document.getElementById("company-name").value === "" || document.getElementById("company-name").value === undefined || document.getElementById("email").value === null || document.getElementById("email").value === "" || document.getElementById("email").value === undefined || document.getElementById("phone").value === null || document.getElementById("phone").value === "" || document.getElementById("phone").value === undefined || document.getElementById("phone").value.length < 10) {
                  console.log(username);
                  console.log(companyName);
                  console.log(email);
                  console.log(phone);
                  alert("Empty Values");
                } else {
                  e.preventDefault();
                  fetch(scriptURL, {
                    method: "POST",
                    body: new FormData(form),
                  }).then((response) => alert("Thank you! your form is submitted successfully.")).then(() => {
                    window.location.reload();
                  }).catch((error) => console.error("Error!", error.message));
                }
              });
            </script>