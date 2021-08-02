export const query = graphql`
{
  prismic {
    allHomepages {
      edges {
        node {
          body {
            ... on PRISMIC_HomepageBodyHero {
              type
              primary {
                background_image
                hero_content
                hero_title
              }
            }
          }
        }
      }
    }
  }
}
`;