<?php

return [
    'success' => [
        'default' => 'Operation completed successfully.',
        'created' => ':item created successfully.',
        'updated' => ':item updated successfully.',
        'deleted' => ':item deleted successfully.',
        'retrieved' => ':item retrieved successfully.',
        'submitted' => 'Your submission was successful.',
    ],

    'error' => [
        'default' => 'An error occurred. Please try again.',
        'not_found' => ':item not found.',
        'validation' => 'There was a validation error.',
        'unauthorized' => 'You are not authorized to perform this action.',
        'server' => 'Server error. Please contact support.',
        'conflict' => 'There is a conflict with your request.',
    ],
    'warning' => [
        'default' => 'Please be cautious with your actions.',
        'deprecated' => ':item is deprecated and may not work in future versions.',
        'unsaved_changes' => 'You have unsaved changes. Do you want to continue?',
    ],
];
