<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makePingPong_oneNumber()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "1";

            $result = $test_PingPongGenerator->makePingPong($input);

            $this->assertEquals("1", $result);
        }

        function test_makePingPong_multipleNumbers()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "2";

            $result = $test_PingPongGenerator->makePingPong($input);

            $this->assertEquals("1, 2", $result);
        }
    }
?>
