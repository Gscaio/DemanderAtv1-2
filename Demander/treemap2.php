<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treemap Simples</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .treemap {
            position: relative;
            width: 800px;
            height: 600px;
            border: 1px solid #ccc;
            background-color: #f5f5f5;
        }
        .node {
            position: absolute;
            border: 1px solid #999;
            box-sizing: border-box;
            text-align: center;
            font-size: 14px;
            color: #fff;
        }
        .node > div {
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="treemap">
        <?php
        // Dados exemplo para o Treemap
        $data = [
            "name" => "Root",
            "children" => [
                [
                    "name" => "A",
                    "value" => 100,
                    "children" => [
                        ["name" => "A1", "value" => 30],
                        ["name" => "A2", "value" => 70]
                    ]
                ],
                [
                    "name" => "B",
                    "value" => 200,
                    "children" => [
                        ["name" => "B1", "value" => 100],
                        ["name" => "B2", "value" => 100]
                    ]
                ]
            ]
        ];

        function renderTreemap($data, $x, $y, $width, $height) {
            $total = array_sum(array_map(function($item) {
                return $item['value'];
            }, $data['children']));

            $currentX = $x;
            $currentY = $y;

            foreach ($data['children'] as $child) {
                $childWidth = $width * ($child['value'] / $total);
                $childHeight = $height;

                echo '<div class="node" style="left: ' . $currentX . 'px; top: ' . $currentY . 'px; width: ' . $childWidth . 'px; height: ' . $childHeight . 'px; background-color: #' . dechex(rand(0x000000, 0xFFFFFF)) . ';">';
                echo '<div>' . htmlspecialchars($child['name']) . '</div>';
                
                if (isset($child['children'])) {
                    renderTreemap($child, $currentX, $currentY, $childWidth, $childHeight);
                }

                echo '</div>';

                $currentX += $childWidth;
            }
        }

        renderTreemap($data, 0, 0, 800, 600);
        ?>
    </div>
</body>
</html>
