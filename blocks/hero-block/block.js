/**
 * Hero Block Editor Script
 */
(function (blocks, element, blockEditor, components) {
  var el = element.createElement;
  var Fragment = element.Fragment;
  var InspectorControls = blockEditor.InspectorControls;
  var useBlockProps = blockEditor.useBlockProps;
  var SelectControl = components.SelectControl;
  var TextControl = components.TextControl;
  var TextareaControl = components.TextareaControl;
  var PanelBody = components.PanelBody;
  var RichText = blockEditor.RichText;

  blocks.registerBlockType("openmrs-theme/hero-block", {
    apiVersion: 2,
    title: "Hero Block",
    icon: "layout",
    category: "design",
    attributes: {
      style: {
        type: "string",
        default: "community",
      },
      breadcrumb: {
        type: "string",
        default: "Community",
      },
      heading: {
        type: "string",
        default: "A generous, talented<br>global community",
      },
      description: {
        type: "string",
        default:
          "Hundreds of developers, technologists, informaticists, health policy officers and<br>government officials come together to build and support our eco-system.",
      },
    },

    edit: function (props) {
      var attributes = props.attributes;
      var blockProps = useBlockProps({ className: "hero-block-editor" });

      var styleMap = {
        community: {
          border: "border-purple-preview",
          textColor: "text-color-scampi-preview",
        },
        product: {
          border: "border-teal-preview",
          textColor: "text-color-teal-preview",
        },
        "about-us": {
          border: "border-orange-preview",
          textColor: "text-color-orange-preview",
        },
      };

      var style = attributes.style || "community";
      var borderClass = styleMap[style]
        ? styleMap[style].border
        : styleMap.community.border;
      var textColorClass = styleMap[style]
        ? styleMap[style].textColor
        : styleMap.community.textColor;

      function updateStyle(value) {
        props.setAttributes({ style: value });
      }

      function updateBreadcrumb(value) {
        props.setAttributes({ breadcrumb: value });
      }

      function updateHeading(value) {
        props.setAttributes({ heading: value });
      }

      function updateDescription(value) {
        props.setAttributes({ description: value });
      }

      return el(
        Fragment,
        {},
        el(
          InspectorControls,
          {},
          el(
            PanelBody,
            { title: "Hero Settings" },
            el(SelectControl, {
              label: "Style",
              value: attributes.style,
              options: [
                { label: "Community", value: "community" },
                { label: "Product", value: "product" },
                { label: "About Us", value: "about-us" },
              ],
              onChange: updateStyle,
            }),
            el(TextControl, {
              label: "Breadcrumb",
              value: attributes.breadcrumb,
              onChange: updateBreadcrumb,
            })
          )
        ),

        el(
          "div",
          blockProps,
          el(
            "div",
            { className: "hero-preview " + borderClass },
            el(
              "div",
              { className: "hero-preview-content" },
              el(
                "div",
                { className: "hero-breadcrumb" },
                el("span", {}, "Home > "),
                el("span", {}, attributes.breadcrumb)
              ),
              el(RichText, {
                tagName: "h2",
                className: "hero-heading " + textColorClass,
                value: attributes.heading,
                onChange: updateHeading,
                placeholder: "Enter heading...",
              }),
              el(RichText, {
                tagName: "p",
                className: "hero-description",
                value: attributes.description,
                onChange: updateDescription,
                placeholder: "Enter description...",
              })
            )
          )
        )
      );
    },

    save: function () {
      return null; // Dynamic rendering from PHP
    },
  });
})(
  window.wp.blocks,
  window.wp.element,
  window.wp.blockEditor,
  window.wp.components
);
