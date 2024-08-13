<?php
$teamMembers = [
    [
        "name" => "Judith Justine",
        "role" => "Executive Director",
        "image" => "img/person1.png",
        "story" => "Judith has been leading the organization with a vision for empowering communities through sustainable development...",
        "socialLinks" => [
            "twitter" => "#",
            "facebook-f" => "#",
            "linkedin-in" => "#",
            "instagram" => "#",
        ]
    ],
    [
        "name" => "Lizzy",
        "role" => "Program Manager",
        "image" => "img/person1.png",
        "story" => "Lizzy oversees the programs that drive our mission forward, with a focus on innovation and impact...",
        "socialLinks" => [
            "twitter" => "#",
            "facebook-f" => "#",
            "linkedin-in" => "#",
            "instagram" => "#",
        ]
    ],
    [
        "name" => "MALISA",
        "role" => "Project Coordinator",
        "image" => "img/person1.png",
        "story" => "As Project Coordinator, Malisa ensures that all projects are executed smoothly and effectively...",
        "socialLinks" => [
            "twitter" => "#",
            "facebook-f" => "#",
            "linkedin-in" => "#",
            "instagram" => "#",
        ]
    ],
    [
        "name" => "Jmatata",
        "role" => "Communications Officer",
        "image" => "img/person1.png",
        "story" => "Jmatata is the voice of our organization, handling all communications with clarity and professionalism...",
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
