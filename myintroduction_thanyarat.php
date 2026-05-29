<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แนะนำตัวเอง - ธัญญารัตน์ บุญผลึก</title>
    <!-- ใช้ Tailwind CSS แบบ CDN เพื่อความสวยงามและรวดเร็ว -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-pink-50 to-purple-100 min-h-screen flex items-center justify-center p-4">

    <?php
        // กำหนดตัวแปรข้อมูลส่วนตัว
        $title = "ยินดีต้อนรับสู่หน้าแนะนำตัว";
        $name = "น.ส. ธัญญารัตน์ บุญผลึก";
        $nickname = "น่า";
        $major = "สารสนเทศ";
        $student_id = "6931910007";
        $bio = "สวัสดีค่ะ ยินดีที่ได้รู้จักทุกคนนะคะ ปัจจุบันกำลังศึกษาอยู่สาขาสารสนเทศ มุ่งมั่นที่จะเรียนรู้สิ่งใหม่ ๆ และพัฒนาตัวเองในสายงานนี้ค่ะ";
    ?>

    <!-- Card แนะนำตัว -->
    <div class="bg-white rounded-2xl shadow-xl p-8 max-w-sm w-full text-center border border-purple-100 transform hover:scale-105 transition duration-300">
        
        <!-- รูปโปรไฟล์จำลอง (สามารถเปลี่ยน path รูปภาพจริงได้ที่ src) -->
        <div class="w-32 h-32 bg-purple-200 rounded-full mx-auto mb-4 flex items-center justify-center text-purple-500 text-5xl font-bold shadow-inner">
            <?php echo mb_substr($nickname, 0, 1, 'UTF-8'); ?>
        </div>

        <!-- ชื่อและชื่อเล่น -->
        <h1 class="text-2xl font-bold text-gray-800 mb-1"><?php echo $name; ?></h1>
        <p class="text-purple-600 font-medium mb-4">ชื่อเล่น: <?php echo $nickname; ?></p>
        
        <hr class="border-gray-100 my-4">

        <!-- ข้อมูลการศึกษา -->
        <div class="text-left space-y-2 text-sm text-gray-600 mb-4">
            <p class="flex justify-between">
                <span class="font-semibold text-gray-700">สาขาวิชา:</span> 
                <span><?php echo $major; ?></span>
            </p>
            <p class="flex justify-between">
                <span class="font-semibold text-gray-700">รหัสนักศึกษา:</span> 
                <span class="font-mono bg-gray-100 px-2 py-0.5 rounded"><?php echo $student_id; ?></span>
            </p>
        </div>

        <hr class="border-gray-100 my-4">

        <!-- ข้อความแนะนำตัว -->
        <p class="text-gray-500 text-sm leading-relaxed text-center italic">
            "<?php echo $bio; ?>"
        </p>

        <!-- ปุ่มติดต่อ (ตกแต่งเพื่อความสวยงาม) -->
        <button class="mt-6 w-full bg-gradient-to-r from-purple-500 to-pink-500 text-white font-medium py-2 px-4 rounded-xl shadow-md hover:opacity-90 transition cursor-pointer">
            ทำความรู้จักกันมากกว่านี้
        </button>
    </div>

</body>
</html>