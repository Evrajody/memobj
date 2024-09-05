/**
 * This file is auto generated using 'php artisan typescript:generate'
 *
 * Changes to this file will be lost when the command is run again
 */

declare namespace App.Models {
    export interface Post {
        id: number;
        intitule: string;
        slug: string | null;
        contenu: string;
        deleted_at: string | null;
        created_at: string | null;
        updated_at: string | null;
    }

    export interface User {
        id: number;
        name: string;
        email: string;
        email_verified_at: string | null;
        password: string;
        remember_token: string | null;
        created_at: string | null;
        updated_at: string | null;
    }

}
