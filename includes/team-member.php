<?php
function teamMemberCard($name, $title, $description, $image)
{ ?>
    <div class="bg-white rounded-[30px] p-6 sm:pl-6 h-auto relative max-w-full flex flex-col-reverse sm:flex-row gap-8 sm:gap-4 shadow-lg sm:shadow-none">
        <div class="flex flex-col gap-4 sm:gap-6 ">
            <div class="relative before:content-[''] before:absolute before:top-0 before:-left-6 before:w-0.5 before:h-full before:bg-[#76b3f8] before:bg-no-repeat">
                <h6><?= htmlspecialchars($name) ?></h6>
                <p class="text-sm mt-1.5"><?= htmlspecialchars($title) ?></p>
            </div>
            <p class="text-sm"><?= htmlspecialchars($description) ?></p>
        </div>
        <div class="relative top-0 right-0 rounded-full size-32 sm:size-36 grow-0 shrink-0 basis-auto z-0 after:content-[''] after:absolute after:top-0 after:left-0 after:w-full after:h-full after:z-[-1] after:rounded-full after:shadow-[-20px_0_30px_rgb(0_188_2_/_50%)]">
            <img src="<?= htmlspecialchars($image) ?>" alt="team-member" class="rounded-full w-full h-full overflow-hidden">
        </div>
    </div>
<?php } ?>