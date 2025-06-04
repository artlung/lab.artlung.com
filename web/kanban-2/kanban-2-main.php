<main class="task-board-2">
    <?php
    // Backlog (red) on-deck
    // Doing (yellow) in-progress
    // Blocked (orange) blocked
    // Review (green) review
    // Done (blue) done
    $states = [
        [
            'name' => 'On Deck',
            'class' => 'on-deck',
        ],
        [
            'name' => 'In Progress',
            'class' => 'in-progress',
        ],
        [
            'name' => 'Blocked',
            'class' => 'blocked',
        ],
        [
            'name' => 'Review',
            'class' => 'review',
        ],
        [
            'name' => 'Done',
            'class' => 'done',
        ]


    ];

    // Print each task state as a header
    foreach ($states as $state) {
        printf('<h2 class="%s">%s</h2>',
            htmlspecialchars($state['class'], ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($state['name'], ENT_QUOTES, 'UTF-8')
        );
    }
    $number_of_tasks = 30;

    $selectOptions = '';
    foreach ($states as $state) {
        $selectOptions .= sprintf(
            '<option value="%s">%s</option>',
            htmlspecialchars($state['class'], ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($state['name'], ENT_QUOTES, 'UTF-8')
        );
    }


    // Print each task as a div with a form and select with options
    for ($i = 1; $i <= $number_of_tasks; $i++) {
        $select = '<select name="task-' . $i . '">';
        $select .= $selectOptions;
        $select .= '</select>';
        printf('<div>
                Task %d
                <form>
                %s
                </form>
            </div>', $i, $select);
    }
    ?>
</main>
