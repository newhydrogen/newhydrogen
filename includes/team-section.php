<?php include './includes/team-member.php'; ?>



<div class="mx-auto px-2 sm:px-4 lg:max-w-screen-lg xl:max-w-screen-xl py-20">
        <div>
            <h2 class="text-[36px] lg:text-5xl font-black leading-[1.1]">Our Company Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 sm:gap-x-8 sm:gap-y-24 mt-8 sm:mt-16 sm:pt-6">
            
                <?php teamMemberCard(
                    'David Lee, PhD', 
                    'Chairman of the Board & President', 
                    '35 years of experience in sustainable energy, software development, electronics, engineering, marketing, sales, and corporate management.', 
                    './assets/images/team-member5.png'); 

                   teamMemberCard(
                    'Steve Hill, MBA', 
                    'Chief Executive Officer', 
                    'Over 20 years of experience in biopharmaceutical and tech business development, sustainable energy, product launches, and market strategy.', 
                    './assets/images/team-member6.png'); 

                     teamMemberCard(
                    'Eric McFarland, PhD', 
                    'Chief Technology Officer', 
                    'UCSB professor, inventor, and energy technology expert with deep experience in catalysis, hydrogen production, and industry-academic collaboration. Former founder and CEO of multiple startups, with over 190 publications and 25 patents.', 
                    './assets/images/team-member2.png'); 

                     teamMemberCard(
                    'Sundar Narayanan', 
                    'Director of Process Engineering', 
                    'Chemical process engineering and scale-up expert with over 35 years of experience in process development, technology integration, and commercialization. former ExxonMobil senior technologist with a track record in energy efficiency, process automation, and advanced systems.', 
                    './assets/images/sundar-narayanan.png'); 

                    teamMemberCard(
                    'Ivor John, PhD', 
                    'Senior Advisor', 
                    'Environmental consultant, auditor and Ph.D. in Atmospheric Physics. Expert in air quality, climate change and the analysis of air emissions and greenhouse gasses.', 
                    './assets/images/ivor-john.png'); 

                     teamMemberCard(
                    'Nirala Singh, PhD', 
                    'Scientific Advisor', 
                    'Expert in Electrocatalysts Development Associate Professor of Chemical Engineering, University of Michigan, Ann Arbor.', 
                    './assets/images/nirala-singh.png'); 
                    ?>
            </div>
        </div>
        <div class="mt-28">
            <h2 class="text-[36px] lg:text-5xl font-black leading-[1.1]">The UCSB Technology Team</h2>
            <div class="md:max-w-[392px] mx-auto mt-8 sm:mt-16">
            <?php teamMemberCard(
                    'Phillip Christopher, PhD', 
                    'Principal Investigator', 
                    'Professor of Chemical Engineering, University of California, Santa Barbara', 
                    './assets/images/philip-christopher.png'); 
                    ?> 
            </div>
          
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 sm:gap-x-8 sm:gap-y-24 mt-8 sm:mt-16 sm:pt-6">
            <?php teamMemberCard(
                    'Justin Marlowe, PhD', 
                    'Research Scientist', 
                    'Ph.D. in Chemical Engineering University of California, Santa Barbara. Expert in multiple materials characterization techniques and reaction engineering.', 
                    './assets/images/team-member3.png'); 
                    ?> 
                      <?php teamMemberCard(
                    'Yikyeom Kim, PhD', 
                    'Research Scientist', 
                    'Ph.D. in Chemical Engineering from the Korea Advanced Institute of Science and Technology (KAIST). Expert in the fabrication of tailored redox catalysts and system analysis of solid-gas reactions.', 
                    './assets/images/team-member4.png'); 
                    ?> 
                     <?php teamMemberCard(
                    'Austin Morales, PhD', 
                    'Research Scientist', 
                    'Ph.D. In Chemical Engineering from the University of Houston. Expert in advanced catalytic processes for hydrogen production.', 
                    './assets/images/austin-for-web.png'); 
                    ?> 
             
            </div>

        </div>
    </div>