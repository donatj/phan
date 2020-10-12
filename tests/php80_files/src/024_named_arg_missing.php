<?php
class C24 {
    public static function main(int $requiredInt, string $requiredString, bool $optionalFlag = false, mixed $other = null) {
        echo json_encode([$requiredString, $requiredInt, $optionalFlag, $other]), "\n";
    }
}
C24::main(other: true);
C24::main(1, optionalFlag: true);
C24::main(1, optionalFlag: true, other: 123);
C24::main(requiredInt: 0, optionalFlag: true, other: 123);
C24::main(requiredString: 0, optionalFlag: true, other: 123);
echo strlen(definitelyInvalidFlag: 'value');
echo json_encode(value: [], flags: 123);
echo json_encode(flags: 123);
echo array_map(array: 123);  // missing callback. hopefully this doesn't change parameter names
