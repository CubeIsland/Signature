<?php
    interface RenderObject
    {
        public function render(Signature $sig, $image, array $config);

        public function requiredOptions();
    }