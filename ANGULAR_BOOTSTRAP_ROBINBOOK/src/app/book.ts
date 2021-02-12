export interface Book {
    book_id?:string;
    title?:string;
    user_id?:string; // Escritor del libro?
    synopsis?:string;
    pdf?:string;
    age_classification?:number;
    cover_page?:string;
    illustrations?:string;
    release_date?:string;
}