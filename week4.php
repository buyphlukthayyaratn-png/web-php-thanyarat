<?php
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['multiplication'])) {
        $number = trim($_POST['number1'] ?? '');
        if ($number === '' || !is_numeric($number)) {
            $result = '<p>กรุณาป้อนตัวเลขที่ถูกต้องสำหรับตารางสูตรคูณ</p>';
        } else {
            $number = (int)$number;
            $result = "<h2>ตารางสูตรคูณของ $number</h2><ul>";
            for ($i = 1; $i <= 12; $i++) {
                $result .= "<li>$number x $i = " . ($number * $i) . '</li>';
            }
            $result .= '</ul>';
        }
    } elseif (isset($_POST['addition'])) {
        $a = trim($_POST['number1'] ?? '');
        $b = trim($_POST['number2'] ?? '');
        if ($a === '' || $b === '' || !is_numeric($a) || !is_numeric($b)) {
            $result = '<p>กรุณาป้อนตัวเลขทั้งสองตัวสำหรับการบวก</p>';
        } else {
            $sum = $a + $b;
            $result = "<h2>ผลลัพธ์การบวก</h2><p>$a + $b = $sum</p>";
        }
    }
}

echo '<!DOCTYPE html>';
echo '<html lang="th">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<title>PHP ฟังก์ชันสูตรคูณและบวก</title>';
echo '</head>';
echo '<body>';
echo '<h1>PHP ฟังก์ชันสูตรคูณและบวก</h1>';
echo '<form method="post">';
echo '<h2>1. ป้อนตัวเลขและแสดงตารางสูตรคูณ</h2>';
echo '<label for="number1">ตัวเลขสำหรับสูตรคูณ</label>';
echo '<input type="number" name="number1" id="number1" required>';
echo '<button type="submit" name="multiplication">แสดงตารางสูตรคูณ</button>';
echo '</form>';
echo '<form method="post">';
echo '<h2>2. ป้อนตัวเลข 2 ตัวและแสดงผลบวก</h2>';
echo '<label for="number2_a">ตัวเลขตัวที่ 1</label>';
echo '<input type="number" name="number1" id="number2_a" required>';
echo '<label for="number2_b">ตัวเลขตัวที่ 2</label>';
echo '<input type="number" name="number2" id="number2_b" required>';
echo '<button type="submit" name="addition">บวกเลข</button>';
echo '</form>';
echo '<div>' . $result . '</div>';
echo '</body>';
echo '</html>';

