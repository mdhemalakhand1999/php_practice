<?php
class Plannet {
    static function echoName() {
        // echo self::getName();
        echo static::getName();
    }
    static function getName() {
        return "Plannet";
    }
}
class Earth extends Plannet {
    static function getName() {
        return "Earth";
    }
}
// Plannet::echoName();
Earth::echoName();

// ১১.২৩ - আর্লি এবং লেট বাইন্ডিং নিয়ে বিস্তারিত আলোচনা