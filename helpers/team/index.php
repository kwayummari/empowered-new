<?php
$boardMembers = [
    [
        "name" => "Judith Justine Kweka",
        "role" => "Board Chair",
        "image" => "img/board/chair.webp",
        "story" => "Judith Justine is an experienced project manager and a public health specialist with more than eight years of progressive experience of working in the NGO sector both local and international NGOs, covering both the public and private health sectors. Specifically, she has worked on interventions in the areas of integrated Sexual Reproductive Health such as Family Planning, Comprehensive Post Abortion Care, Cervical Cancer, STIs, HIV and AIDS, GBV, and livelihood enhancement. Judith has extensive experience of working with ministries, the Parliament and local government authorities with profound experience across all the six WHO health systems building blocks financing, health workforce, information systems, medical products and technologies, leadership/governance, and service delivery.",
        "socialLinks" => [
            "twitter" => "#",
            "facebook-f" => "#",
            "linkedin-in" => "#",
            "instagram" => "#",
        ]
    ],
    [
        "name" => "Alice Henry Mbowe",
        "role" => "Board Member",
        "image" => "img/board/alice.webp",
        "story" => "Alice Henry Mbowe is a legal professional holding a bachelor degree in Low from Mzumbe University in Tanzania, with 6 years’ experience of working as an administration and human resources manager with crown healthcare (T) Ltd.  She has extensive experience with the health sector in Tanzania including working directly with both private and public health facilities to ensure availability of medical equipment and devices. ",
        "socialLinks" => [
            "twitter" => "#",
            "facebook-f" => "#",
            "linkedin-in" => "#",
            "instagram" => "#",
        ]
    ],
    [
        "name" => "Rita Mbeba",
        "role" => "Board Member",
        "image" => "img/board/rita.webp",
        "story" => "Mrs Rita Mbeba is a public health professional with over 15 years’ experience in leading health, women empowerment and development programs in Tanzania. She is currently working with Girls Effect in Tanzania as a country director where is responsible with overseeing and leading the country team and program unit. She is also responsible with managing the startup, design, Implementation, monitoring and evaluation of all projects. Prior to that, Mrs. Rita has worked with Pathfinder international as a Senior Portfolio Technical Advisor- AYSRH at Pathfinder. Prior to that she worked with Marie Stopes Tanzania as a project lead where she was responsible with strategic oversight and portfolio management of all donor-funded projects of varying size and technical scope. Prior to that she worked with Amref Tanzania as a project manager responsible with project management including coordination of project plans, monitor, implement and evaluate project interventions.",
        "socialLinks" => [
            "twitter" => "#",
            "facebook-f" => "#",
            "linkedin-in" => "#",
            "instagram" => "#",
        ]
    ],
    [
        "name" => "Agusta Kinunda",
        "role" => "Board Member",
        "image" => "img/board/agusta.webp",
        "story" => "A Finance and Administration professional with over 10 years’ experience working with national and international organization including NGOs. She is certified accountant, with CPA certification from the National Board of Accountants and Auditors (NBAA) in Tanzania. She holds a master's degree in finance and investment. She has worked with Tanzania Postal Bank (TPB) as a Banking Operation Officer, Plan International in Dar es Salaam as an accountant, Marie Stopes Tanzania, in Dar es Salaam as Project Accountant and Hanns R. Neumann Stiftung Africa, in Dar es Salaam as Finance and Administration Manager",
        "socialLinks" => [
            "twitter" => "#",
            "facebook-f" => "#",
            "linkedin-in" => "#",
            "instagram" => "#",
        ]
    ],
    [
        "name" => "Mwiru Sima ",
        "role" => "Board Member",
        "image" => "img/board/mwiru.webp",
        "story" => "A dynamic and visionary development professional with over 20 years of experience in the sector, with a master's degree in public health specializing in Medical Sociology, my diverse background encompasses research, monitoring and evaluation (M&E), and program management across various sectors. I possess a proven track record of successful leadership, strategic partnerships, institutional funding, and effective stakeholder engagement. Committed to driving impactful change, I am well-equipped to lead and shape the organization's mission, while fostering a culture of inclusivity, collaboration, and operational excellence.",
        "socialLinks" => [
            "twitter" => "#",
            "facebook-f" => "#",
            "linkedin-in" => "#",
            "instagram" => "#",
        ]
    ],
];

if (isset($_GET['bMember'])) {
    $selectedBoardMember = $boardMembers[$_GET['bMember']];
}
?>

<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Board members</p>
        </div>
        <div class="row">
            <?php foreach ($boardMembers as $index => $bMember) : ?>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <a href="?bMember=<?= $index ?>">
                        <div class="team-img">
                            <img src="<?= $bMember['image'] ?>" alt="Team Image">
                        </div>
                    </a>
                </div>
                <div class="team-text">
                            <h2><?= $bMember['name'] ?></h2>
                            <p><?= $bMember['role'] ?></p>
                            <div class="team-social">
                                <?php foreach ($bMember['socialLinks'] as $platform => $link) : ?>
                                    <a href="<?= $link ?>"><i class="fab fa-<?= $platform ?>"></i></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php if (isset($selectedBoardMember)) : ?>
    <!-- Popup Modal -->
    <div class="popup-modal">
        <div class="popup-content">
            <span class="close" onclick="window.location.href='?';">&times;</span>
            <h2><?= $selectedBoardMember['name'] ?></h2>
            <p><strong><?= $selectedBoardMember['role'] ?></strong></p>
            <p><?= $selectedBoardMember['story'] ?></p>
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
