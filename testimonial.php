
<style>
  /* Testimonials Section */
.testimonial-section {
    background-color: #f9f9f9;
    padding: 60px 20px;
}

.testimonial-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 30px;
}

.testimonial-item {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    max-width: 350px;
    width: 100%;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    gap: 15px;
}

.testimonial-avatar {
    border-radius: 50%;
    width: 90px;
    height: 90px;
}

.testimonial-content {
    flex-grow: 1;
}

.testimonial-name {
    font-weight: bold;
    font-size: 18px;
}

.testimonial-item p {
    margin: 0;
}

.testimonial-item small {
    color: #777;
    font-size: 14px;
}

@media (max-width: 768px) {
    .testimonial-container {
        flex-direction: column;
        align-items: center;
    }

    .testimonial-item {
        max-width: 100%;
    }
}

</style>

<section id="testimonials" class="testimonial-section">
    <div class="testimonial-container">
        <div class="testimonial-item">
            <img src="image/testimonials/test1.jpeg" alt="Chris Fox" class="testimonial-avatar">
            <div class="testimonial-content">
                <p><span class="testimonial-name">Chris Fox</span><br><small>CEO at Mighty Schools</small></p>
                <p>John Doe saved us from a web disaster. His expertise and quick response were invaluable.</p>
            </div>
        </div>

        <div class="testimonial-item">
            <img src="./image/testimonials/test2.jpeg" alt="Rebecca Flex" class="testimonial-avatar">
            <div class="testimonial-content">
                <p><span class="testimonial-name">Rebecca Flex</span><br><small>CEO at Company</small></p>
                <p>No one is better than John Doe. His creative solutions exceeded all expectations.</p>
            </div>
        </div>

        <div class="testimonial-item">
            <img src="./image/testimonials/test3.jpeg" alt="Alex Brown" class="testimonial-avatar">
            <div class="testimonial-content">
                <p><span class="testimonial-name">Alex Brown</span><br><small>Manager at Tech Solutions</small></p>
                <p>John Doe's work ethic and expertise are unmatched. He helped us revamp our entire online presence.</p>
            </div>
        </div>
    </div>
</section>
