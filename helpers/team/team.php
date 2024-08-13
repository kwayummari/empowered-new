<?php
$teamMembers = [
    [
        "name" => "Grace Edson Kisabo",
        "role" => "Programme Manager",
        "image" => "img/team/grace.jpg",
        "story" => "Ms. Grace Kisabo, is a project planning, management and community development professional with over 4 years’ experience in leading health and community development programs. She is currently working with Empowered for Change (E4C) as a Program Manager, providing overall strategic oversight of the organization and oversees smooth implementation of project in the organization. Prior to that, Grace served as an Assistant Program Manager with Africa-Asia Youth Foundation (AAYFO) where she was responsible with implementation of all day to day activities of the projects and maintains strong relationship with government, stakeholders and the community. Grace holds a bachelor degree of arts in project planning, Management and Community development from Dodoma University Tanzania.",
        "socialLinks" => [
            "twitter" => "#",
            "facebook-f" => "#",
            "linkedin-in" => "#",
            "instagram" => "#",
        ]
    ],
    [
        "name" => "Lightness Charles Limbe",
        "role" => "Projects Manager",
        "image" => "img/team/lightness.jpg",
        "story" => "Ms Lightness Limbe is a psychologist and a projects management professional with 4 years of experience in leading donor funded projects. She is currently working with Empowered for Change (E4C) as a projects manager, leading all SRHR, gender, and other development projects ensuring effective project design, planning, and implementation and reporting. She is also responsible with ensuring effective management of donor funding and maintain relationships with government and partners. Prior to that, Ms. Lightness was working with EKAMA Development Foundation as a clinical psychologist and research assistant providing individual and group therapy sessions using evidence-based practices and developing and implementing treatment plans tailored to clients' needs and goals. Ms. Lightness holds a bachelor’s degree in Psychology from University of Dar Es Salaam.",
        "socialLinks" => [
            "twitter" => "#",
            "facebook-f" => "#",
            "linkedin-in" => "#",
            "instagram" => "#",
        ]
    ],
];

if (isset($_GET['member'])) {
    $selectedMember = $teamMembers[$_GET['member']];
}
?>

<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Meet Our Board Members</p>
            <h2>Awesome guys behind our activities</h2>
        </div>
        <div class="row">
            <?php foreach ($teamMembers as $index => $member) : ?>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <a href="?member=<?= $index ?>">
                        <div class="team-img">
                            <img src="<?= $member['image'] ?>" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2><?= $member['name'] ?></h2>
                            <p><?= $member['role'] ?></p>
                            <div class="team-social">
                                <?php foreach ($member['socialLinks'] as $platform => $link) : ?>
                                    <a href="<?= $link ?>"><i class="fab fa-<?= $platform ?>"></i></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php if (isset($selectedMember)) : ?>
    <!-- Popup Modal -->
    <div class="popup-modal">
        <div class="popup-content">
            <span class="close" onclick="window.location.href='?';">&times;</span>
            <h2><?= $selectedMember['name'] ?></h2>
            <p><strong><?= $selectedMember['role'] ?></strong></p>
            <p><?= $selectedMember['story'] ?></p>
        </div>
    </div>
<?php endif; ?>

<style>
    .popup-modal {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }
    .popup-content {
        background: white;
        padding: 20px;
        border-radius: 8px;
        width: 80%;
        max-width: 500px;
        position: relative;
        text-align: center;
    }
    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        font-size: 20px;
    }
</style>
