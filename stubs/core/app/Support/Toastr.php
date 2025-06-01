<?php

namespace App\Support;

use Illuminate\Support\Facades\Session;

/**
 * A utility class for flashing Toastr notifications to the session.
 */
class Toastr
{
    /**
     * Flash a success Toastr notification.
     *
     * @param string $message The message to display.
     * @param string|null $title The optional title of the notification.
     * @return void
     */
    public static function success(string $message, ?string $title = "Success"): void
    {
        Session::flash('toastrsSuccess', [
            'message' => $message,
            'title' => $title,
        ]);
    }

    /**
     * Flash an error Toastr notification.
     *
     * @param string $message The message to display.
     * @param string|null $title The optional title of the notification.
     * @return void
     */
    public static function error(string $message, ?string $title = "Error"): void
    {
        Session::flash('toastrsError', [
            'message' => $message,
            'title' => $title,
        ]);
    }

    /**
     * Flash a warning Toastr notification.
     *
     * @param string $message The message to display.
     * @param string|null $title The optional title of the notification.
     * @return void
     */
    public static function warning(string $message, ?string $title = "Warning"): void
    {
        Session::flash('toastrsWarning', [
            'message' => $message,
            'title' => $title,
        ]);
    }

    /**
     * Flash an info Toastr notification.
     *
     * @param string $message The message to display.
     * @param string|null $title The optional title of the notification.
     * @return void
     */
    public static function info(string $message, ?string $title = "Info"): void
    {
        Session::flash('toastrsInfo', [
            'message' => $message,
            'title' => $title,
        ]);
    }
}