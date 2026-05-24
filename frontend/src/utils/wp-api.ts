// wp-api.ts — 자동 변환: WordPress JS 함수들 → TypeScript 모듈
const WP_BASE = 'https://cp-aa546fb2-wp.choichoi3227.workers.dev/wp-json/wp/v2';

export interface WpPost {
  id: number; slug: string;
  title: { rendered: string }; content: { rendered: string };
  excerpt: { rendered: string }; date: string;
  _embedded?: { author?: Array<{ name: string }> };
}
export interface WpPage {
  id: number; slug: string;
  title: { rendered: string }; content: { rendered: string };
}
export interface WpMedia {
  id: number; source_url: string; alt_text: string;
  media_type: string; mime_type: string;
}

// get_posts() 변환
export async function getPosts(perPage = 10): Promise<WpPost[]> {
  try {
    const res = await fetch(`${WP_BASE}/posts?per_page=${perPage}&_embed`);
    return res.ok ? await res.json() as WpPost[] : [];
  } catch { return []; }
}

// get_post() 변환
export async function getPost(slug: string): Promise<WpPost | null> {
  try {
    const res = await fetch(`${WP_BASE}/posts?slug=${slug}&_embed`);
    if (!res.ok) return null;
    const posts = await res.json() as WpPost[];
    return posts[0] ?? null;
  } catch { return null; }
}

// get_page() 변환
export async function getPage(slug: string): Promise<WpPage | null> {
  try {
    const res = await fetch(`${WP_BASE}/pages?slug=${slug}`);
    if (!res.ok) return null;
    const pages = await res.json() as WpPage[];
    return pages[0] ?? null;
  } catch { return null; }
}

// wp_get_attachment_url() 변환
export async function getMediaUrl(id: number): Promise<string | null> {
  try {
    const res = await fetch(`${WP_BASE}/media/${id}`);
    if (!res.ok) return null;
    const media = await res.json() as WpMedia;
    return media.source_url ?? null;
  } catch { return null; }
}

// bloginfo() 변환
export async function getSiteInfo(): Promise<Record<string, string>> {
  try {
    const res = await fetch('https://cp-aa546fb2-wp.choichoi3227.workers.dev/wp-json');
    return res.ok ? await res.json() : {};
  } catch { return {}; }
}
