<!-- Single Post Start-->
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>Our Technical Approach</h2>

                    <!-- Paragraph 1 with Read More -->
                    <p>
                        <span style="color: #F27D2D; font-weight: bold; font-style: italic;">Training and mentorship: </span>
                        We have designed simplified training materials grounded on adult learning theories and we use age-appropriate methodologies to make learning more joyful and enjoyable for young people. 
                        <span id="dots1">...</span><span id="more1" style="display:none;">
                        Our training packages incorporate on-going mentorship to ensure that gained knowledge is sustained and skills are put into practice and become part of day-to-day life of women and girls.
                        </span>
                        <a onclick="toggleReadMore('1')" id="readMoreBtn1" style="color: #F27D2D; cursor: pointer;">Read More</a>
                    </p>

                    <!-- Paragraph 2 with Read More -->
                    <p>
                        <span style="color: #F27D2D; font-weight: bold; font-style: italic;">Structured dialogues: </span>
                        Our learning approaches are grounded on theories from various scholars that, learning cannot occur without dialogue and reflection. Reading and listening are not enough.
                        <span id="dots2">...</span><span id="more2" style="display:none;">
                        Interaction is required. We believe that, the process of putting ideas into words is itself an important form of active engagement with the content, and a way of growing knowledge (even without feedback). If you have never expressed something in your own words, you do not know it fully. Dialogue is a great way for women and girls to reveal themselves in the words they use and the way those words are delivered. Dialogues spark existing conflicts which would otherwise remain obscured. The conflict can be external—character vs. character or character vs. environment—or the dialogue can reflect the viewpoint character’s internal struggle. We have used these theories to develop a dialogue guide which stimulate self-expression and interactions among peers. By fostering on-going dialogue and participation, women, girls or their influencers can cultivate a deeper understanding of local norms and beliefs, thus laying the groundwork for sustainable behavior change.
                        </span>
                        <a onclick="toggleReadMore('2')" id="readMoreBtn2" style="color: #F27D2D; cursor: pointer;">Read More</a>
                    </p>

                    <!-- Repeat similar structure for other paragraphs -->
                    <!-- ... -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Post End-->

<script>
function toggleReadMore(id) {
    var dots = document.getElementById("dots" + id);
    var moreText = document.getElementById("more" + id);
    var btnText = document.getElementById("readMoreBtn" + id);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read More";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read Less";
        moreText.style.display = "inline";
    }
}
</script>
