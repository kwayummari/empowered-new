<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Meet Our Board Members</p>
            <h2>Awesome guys behind our activities</h2>
        </div>
        <div class="row">
            <!-- Reusable team member component -->
            <div class="col-lg-3 col-md-6" v-for="member in teamMembers" :key="member.name">
                <div class="team-item">
                    <div class="team-img">
                        <img :src="member.image" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>{{ member.name }}</h2>
                        <p>{{ member.role }}</p>
                        <div class="team-social">
                            <a v-for="social in member.socialLinks" :key="social.platform" :href="social.link">
                                <i :class="`fab fa-${social.platform}`"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const app = new Vue({
        el: '.team',
        data: {
            teamMembers: [
                {
                    name: "Judith Justine",
                    role: "Executive Director",
                    image: "img/topper.webp",
                    socialLinks: [
                        { platform: "twitter", link: "#" },
                        { platform: "facebook-f", link: "#" },
                        { platform: "linkedin-in", link: "#" },
                        { platform: "instagram", link: "#" },
                    ]
                },
                {
                    name: "Lizzy",
                    role: "Program Manager",
                    image: "img/topper.webp",
                    socialLinks: [
                        { platform: "twitter", link: "#" },
                        { platform: "facebook-f", link: "#" },
                        { platform: "linkedin-in", link: "#" },
                        { platform: "instagram", link: "#" },
                    ]
                },
                {
                    name: "MALISA",
                    role: "Project Coordinator",
                    image: "img/topper.webp",
                    socialLinks: [
                        { platform: "twitter", link: "#" },
                        { platform: "facebook-f", link: "#" },
                        { platform: "linkedin-in", link: "#" },
                        { platform: "instagram", link: "#" },
                    ]
                },
                {
                    name: "Jmatata",
                    role: "Communications Officer",
                    image: "img/topper.webp",
                    socialLinks: [
                        { platform: "twitter", link: "#" },
                        { platform: "facebook-f", link: "#" },
                        { platform: "linkedin-in", link: "#" },
                        { platform: "instagram", link: "#" },
                    ]
                },
            ]
        }
    });
</script>
