<section id="contact">
            <h1>Contact Us</h1>
            <form id="contact-form" >
                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name"><br>
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email"><br>
                <label for="message">Message:</label><br>
                <textarea name="message" id="message"></textarea><br>

                <button type="submit">Submit</button>
            </form>
            <script>
                document.getElementById('contact-form').addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent the form from submitting the traditional way
            
                    // Get form values and trim whitespace
                    var name = document.getElementById('name').value.trim();
                    var email = document.getElementById('email').value.trim();
                    var message = document.getElementById('message').value.trim();
            
            
                    // Basic validation       
                
                    if (email.trim() === "" || name.trim()=== "" || message.trim()==="") {
                            alert('Please fill all the fields.');
                        }
                  
                    alert('We received your message!');
                    setTimeout(function() {
                        window.location.href = './index.php'; // Adjust to your homepage path
                    }, 1000); // 1-second delay
                });
            </script>
            
            
           
       </section>