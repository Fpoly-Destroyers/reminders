<?php

if (!function_exists('createSlug')) {
    function createSlug($string)
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        $slug = preg_replace('/-+/', '-', $slug);
        return strtolower(generatePassword() . $slug);
    }
}

if (!function_exists('generatePassword')) {
    function generatePassword($length = 6)
    {
        // Đảm bảo độ dài mật khẩu tối thiểu là 6 ký tự
        if ($length < 6) {
            $length = 6;
        }

        // Các tập ký tự cần thiết
        $upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
        $digits = '0123456789';

        // Tạo mật khẩu với ít nhất một ký tự viết hoa, một ký tự viết thường và một số
        $password = [];
        $password[] = $upperCase[random_int(0, strlen($upperCase) - 1)];
        $password[] = $lowerCase[random_int(0, strlen($lowerCase) - 1)];
        $password[] = $digits[random_int(0, strlen($digits) - 1)];

        // Tạo phần còn lại của mật khẩu
        $allCharacters = $upperCase . $lowerCase . $digits;
        while (count($password) < $length) {
            $password[] = $allCharacters[random_int(0, strlen($allCharacters) - 1)];
        }

        // Xáo trộn các ký tự để mật khẩu ngẫu nhiên hơn
        shuffle($password);

        // Trả về mật khẩu dưới dạng chuỗi
        return implode('', $password);
    }
}
