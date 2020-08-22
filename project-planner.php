<?php $pageTitle = 'Project Planner'; ?>
<?php $pageId = 'projectplanner'; ?>
<?php include('meta.php') ?>

<body class="<?php echo $pageId; ?>">
    <?php include('header.php') ?>
    <section id="projectplannerSec" class="h-auto">
        <iframe id="typeform-full" width="100%" height="100%" frameborder="0" allow="camera; microphone; autoplay; encrypted-media;" src="https://form.typeform.com/to/ibpgeKDW"></iframe>
    </section>
    <?php include('footer.php') ?>
</body>
<script type="text/javascript" src="https://embed.typeform.com/embed.js"></script>
<?php include('scripts.php') ?>
<style type="text/css">
    html {
        margin: 0;
        height: 100%;
        overflow: hidden;
    }

    iframe {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        border: 0;
    }
</style>